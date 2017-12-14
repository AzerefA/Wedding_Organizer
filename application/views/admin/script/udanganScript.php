<script type="text/javascript">
	function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#preview').attr('src', e.target.result);
      $('#preview').attr('style', 'height:250px;width:250px');
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#udanganInput").change(function() {
  readURL(this);
});

</script>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("captionModal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closeModal")[0];
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";

    }

    $('img').click(function () {
        modal.style.display = "block";
        modalImg.src = $(this).attr('src');
        captionText.innerHTML = $(this).attr('alt');

    })

    $('body').keydown(function (e) {
        if(e.keyCode == 27 ){
            modal.style.display = "none";
        }
    })






</script>