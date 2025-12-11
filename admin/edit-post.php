<?php include 'partials/header.php'; ?>

<section class="form-section">
        <div class="container form-section-container">
            <h2>Edit Post</h2>
             
                <form action="" enctype="multipart/form-data">
                    <input type="text" placeholder="Title">
                    <select>
                        <option value="1">Fashion</option>
                        <option value="1">Styling</option>
                        <option value="1">cutting</option>
                        <option value="1">Sport gear</option>
                        <option value="1">Ankara fabric</option>
                    </select>    
                    <textarea rows="10" placeholder="Body"></textarea>
            
                      <div class="form-control">
                        <label for="thumbnail">Change Thumbnail</label>
                        <input type="file" id="thumbnail">
                      </div>
                    <button type="submit" class="btn">Update Post</button>
                </form>
        </div>
</section>

