<?php
session_start();
include('db/config.php');

if (isset($_GET['id'])) {
    $userId = base64_decode($_GET['id']);

    $query = "SELECT * FROM tbl_admin WHERE _id = $userId";
    $userResult = mysqli_query($conn, $query);

    $query = "SELECT title FROM navigation_menus";
    $navigationMenuResult = $conn->query($query);

    if ($navigationMenuResult) {
        $navigation_menu_values = [];
        while ($row = $navigationMenuResult->fetch_assoc()) {
            $navigation_menu_values[] = $row['title'];
        }
    } else {
        echo "Error fetching navigation menu values: " . mysqli_error($conn);
    }

    if ($userResult) {
        $row = mysqli_fetch_assoc($userResult);
        $username = $row['Username'];
        $email = $row['email'];
        $phone = $row['mobile'];
        $status = $row['status'];
        $password = $row['password'];
        $role = $row['admin_role'];
      
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['mobile']);
        $newPassword = mysqli_real_escape_string($conn, $_POST['password']);
        $status = mysqli_real_escape_string($conn, $_POST['status']);
        $role = mysqli_real_escape_string($conn, $_POST['admin_role']);

        

        // Check if the entered password is different from the stored one
        $checkPasswordQuery = "SELECT password FROM tbl_admin WHERE _id = $userId";
        $checkPasswordResult = mysqli_query($conn, $checkPasswordQuery);

        if ($checkPasswordResult) {
            $storedPasswordRow = mysqli_fetch_assoc($checkPasswordResult);
            $storedPassword = $storedPasswordRow['password'];

            if ($newPassword !== $storedPassword && !empty($newPassword)) {
                $newPassword = md5($newPassword);
                $updateUserQuery = "UPDATE tbl_admin SET Username='$username', email='$email', mobile='$phone', password='$newPassword', status='$status', admin_role='$role' WHERE _id = $userId";
            } else {
                $updateUserQuery = "UPDATE tbl_admin SET Username='$username', email='$email', mobile='$phone', status='$status', admin_role='$role' WHERE _id = $userId";
            }
        }
        if (mysqli_query($conn, $updateUserQuery)) {
            $selectedTitles = isset($_POST['title']) ? $_POST['title'] : [];

            $deleteQuery = "DELETE FROM admin_permissions WHERE admin_id = $userId";
            mysqli_query($conn, $deleteQuery);

            foreach ($selectedTitles as $selectedTitle) {
                $getMenuIdQuery = "SELECT id FROM navigation_menus WHERE title = '$selectedTitle'";
                $menuIdResult = mysqli_query($conn, $getMenuIdQuery);

                if ($menuIdResult) {
                    $menuIdRow = mysqli_fetch_assoc($menuIdResult);
                    $menuId = $menuIdRow['id'];

                    $insertPermissionQuery = "INSERT INTO admin_permissions (admin_id, navigation_menu_id) VALUES ($userId, $menuId)";
                    mysqli_query($conn, $insertPermissionQuery);
                } else {
                    echo "Error fetching menu ID: " . mysqli_error($conn);
                }
            }
            $stat = 1;
            $re = base64_encode($stat);
            $_SESSION['status_msg'] = "User details and permissions updated successfully.";
            header("location:manage-staff.php?status_msg=$re");

            // $_SESSION['status'] = "User details and permissions updated successfully.";
            // header("Location: edit-user.php?id=" . $_GET['id']);
            exit();
        } else {
            echo "Error updating user details: " . mysqli_error($conn);
            exit();
        }
    }
    $conn->close();
} else {
    echo "Invalid request";
}
