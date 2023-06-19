<script>
  document.addEventListener('DOMContentLoaded', function() {
  var optionsBox = document.getElementById("options-box-{{$file->id}}");
  var ellipsisBtn = document.getElementById("ellipsis-btn-{{$file->id}}");
  
  ellipsisBtn.addEventListener('click', function() {
      if (optionsBox.style.display === 'block') {
          optionsBox.style.display = 'none';
      } else {
          optionsBox.style.display = 'block';
      }
  });
  });
</script>