<script>
document.addEventListener('DOMContentLoaded', function() {
var optionsBox = document.getElementById("options-box-{{$answer->id}}");
var ellipsisBtn = document.getElementById("ellipsis-btn-{{$answer->id}}");

ellipsisBtn.addEventListener('click', function() {
    if (optionsBox.style.display === 'block') {
        optionsBox.style.display = 'none';
    } else {
        optionsBox.style.display = 'block';
    }
});
});

document.addEventListener('DOMContentLoaded', function() {
var caixaEdita = document.getElementById('edita-box-{{$answer->id}}');
var editarBtn = document.getElementById('editar-btn-{{$answer->id}}');

editarBtn.addEventListener('click', function() {
  if (caixaEdita.style.display === 'block') {
    caixaEdita.style.display = 'none';
  } else {
    caixaEdita.style.display = 'block';
  }
});
});
</script>