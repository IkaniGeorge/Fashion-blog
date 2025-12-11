<?php 
include 'partials/header.php'; 
?>

<section class="form-section">
        <div class="container form-section-container">
            <h2>Add User</h2>
                <div class="alert-message success">
                     <p>This is a success message</p>
                 </div>

             
         <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
            <input type="text" placeholder="Username">
            <input type="text" placeholder="Email">
            <input type="text" placeholder="Create password">
            <input type="text" placeholder="Confirm password">
            <select>
                    <option value="0">Author</option>
                    <option value="1">Admin </option>
            </select>

            <div class="form-control">
                <label for="avatar">User Avatar</label>
                <input type="file">
            </div>
            <button type="submit" class="btn">Add User</button>
         </form>
        </div>
</section>

