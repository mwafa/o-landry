<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>

<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-body">
				<div class="box-title">
					Masukkan Cucian Baru
				</div>
			</div>
			<div class="card-body">
				<form action="<?=base_url('cucian_baru/insert')?>" method="post">
					<div class="form-group">
						<label for="">Pelanggan</label>
						<div class="input-group">
							<input  type="text" class="form-control" name="nama" id="nama-pelanggan" required placeholder="Nama Pelanggan"
              autocomplete="new-password" autofill="false">
						</div>
					</div>
					<div class="form-group">
						<label for="">Nomer HP</label>
						<div class="input-group">
							<input type="text" class="form-control" name="hp" required placeholder="Nomer HP">
						</div>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<div class="input-group">
							<input type="text" class="form-control" name="email" required placeholder="Masukkan email pengguna">
						</div>
					</div>
					<hr>
					<h3 class="mb-3">Data Cucian</h3>
					<div class="form-group">
						<div class="input-group">
							<input type="number" name="berat" min="0" value="0" step=".01" class="form-control" required placeholder="Berat Cucian">
							<div class="input-group-append">
								<span class="input-group-text">Kg</span>
							</div>
						</div>
					</div>
					<div class="form-group">
            <label for="">Paket Cucian</label>
            <?php foreach($paket as $p): ?>
						<div class="input-group">
							<div class="form-check">
								<input data-harga="<?=$p->harga?>" class="form-check-input" type="radio" name="paket" id="paket-<?=$p->id?>"
									value="<?=$p->id?>" checked>
								<label class="form-check-label" for="paket-<?=$p->id?>">
									<?=$p->nama?> (Rp. <span class="rp"><?=$p->harga?></span>,- /Kg)
								</label>
							</div>
            </div>
            <?php endforeach?>
						<h2 class="mt-3">
							Harga: Rp. <span id="harga">0</span>
						</h2>
					</div>
					<button class="btn btn-success">
						Submit
					</button>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	window.onload = () => {
		let berat = document.querySelector('[name="berat"]')
		let paket = document.querySelectorAll('[name="paket"]')
    let harga = document.getElementById('harga')
    
    let updateHarga = () => {
      let hargaPerKg = document.querySelector('[name="paket"]:checked').getAttribute('data-harga')
      harga.innerText = Number(berat.value * hargaPerKg).format(2, 3, ".", ",") || "---"
    }

    paket.forEach(item => item.addEventListener('input', updateHarga))
    berat.addEventListener('input', updateHarga)
	}

</script>

<script>
function autocomplete(inp, arr, callback) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              callback(inp.value)
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
fetch("<?=base_url('cucian_baru/pelanggan')?>").then(data => data.json()).then(pelanggan => {
    autocomplete(document.getElementById("nama-pelanggan"), pelanggan.map(user => user.nama), nama => {
        var user = pelanggan.filter(item => item.nama == nama)[0] || {}
        document.querySelector('[name="hp"]').value = user.hp
        document.querySelector('[name="email"]').value = user.email
    });
})


</script>