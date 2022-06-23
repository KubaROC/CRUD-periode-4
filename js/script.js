function closeAll() {
  document.getElementById("nieuw").style.display = "none";
  document.getElementById("edit").style.display = "none";
  document.getElementById("delete").style.display = "none";
}

function openForm() {
  closeAll();
  document.getElementById("nieuw").style.display = "block";
  document.getElementById("button-nieuw").style.display = "none";
}
function openEdit() {
  closeAll();
  document.getElementById("edit").style.display = "block";
  document.getElementById("button-nieuw").style.display = "none";
}
function openDelete() {
  closeAll();
  document.getElementById("delete").style.display = "block";
  document.getElementById("button-nieuw").style.display = "none";
}

function options() {
  document.getElementById("options").style.display = "block";
}
function vluchtInfo(id) {
  const vluchtInfos = document.querySelectorAll(".vlucht-info");

  vluchtInfos.forEach((vluchtInfo) => {
    vluchtInfo.style.display = "none";
  });

  vluchtInfos[id].style.display = "block";
}
function vluchtAdd(id) {
  document.getElementById("vlucht-add").style.display = "block";
}
