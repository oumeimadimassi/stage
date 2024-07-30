<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="image-upload" class="btn-upload">
        Choisir une image
    </label>
    <input type="file" id="image-upload" name="profile_picture" accept="image/*" style="display: none;" onchange="form.submit()">
    <button type="submit" class="btn-submit">Uploader</button>
</form>