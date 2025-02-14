<!-- footer.php -->
</div>
</div>

<script>
    const profileImage = document.getElementById('profileImage');
    const imageUpload = document.getElementById('imageUpload');

    profileImage.addEventListener('click', () => {
        imageUpload.click();
    });

    imageUpload.addEventListener('change', function(e) {
        const reader = new FileReader();
        reader.onload = function(event) {
            profileImage.style.backgroundImage = `url(${event.target.result})`;
            profileImage.style.backgroundSize = 'cover';
            profileImage.style.backgroundPosition = 'center';
            profileImage.innerHTML = '';
        }
        reader.readAsDataURL(e.target.files[0]);
    });
</script>

</body>
</html>
