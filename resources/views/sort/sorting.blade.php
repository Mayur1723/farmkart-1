<!DOCTYPE html>
<html>
<head>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<body>
<table class="table table-bordered">
   

<thead>

<tr>
    
<th>Iteam</th>
<th>Quantiy</th>
<th>Price</th>











</tr>
<tr>
    <td><select id="res">

    <option id="parent" value="wheat">Select</option>
    <option id="parent" value="wheat">wheat</option>
    <option id="parent" value="rice">rice</option>
    <option id="parent" value="dal">dal</option>
    <option id="parent" value="moog">moog</option>
    <option id="parent" value="juwar">juwar</option>
    <option id="parent" value="soya">soya</option>
    <option id="parent" value="chana">chana</option>
    
 
</select></td>
    <td><select id="categoryFilter" name="Selection" onchange="check()">

<option value="2kg"> 2kg</option>
<option value="1kg"> 1kg</option>
<option value="3kg"> 3kg</option>

</select></td>
    <td><select>

<option value="90.00"> 90.00 </option> 
<option value="60.00"> 60.00 </option> 
<option value="100.00"> 100.00 </option> 
<option value="80.00"> 80.00 </option> 
</select></td>
</tr>
</thead>

<tbody>








</tbody>

</table>

</div>


<script>
const sortButton = document.getElementById('dropdownBtnSort');
const dropdownSortOptions = document.getElementById('dropdownSortOptions');
const sortOptions = document.querySelectorAll('.sortOption');

const filterButton = document.getElementById('dropdownBtnFilter');
const dropdownFilterOptions = document.getElementById('dropdownFilterOptions');
const filterOptions = document.querySelectorAll('.filterOption');

dropdownSortOptions.style.display = "none";
dropdownFilterOptions.style.display = "none";

let data = [
  {
    name: "wheat",
    quantity: 2kg,
    price: 90.00
  },
  {
    name: "rice",
    quantity: 2kg,
    price: 60.00
  },
  {
    name: "moog",
    quantity: 1kg,
    price: 60.00
  },
  {
    name: "chana",
    quantity: 2kg,
    price: 90.00
  },
  {
    name: "juwar",
    quantity: 1kg,
    price: 90.00
  }
  {
    name: "soya",
    quantity: 2kg,
    price: 100.00
  }
  
]

let sortType = '';
let filterType = '';
let displayedArr = [...data]










const renderList = (arr) => {
  document.getElementById('list').innerHTML = ''
  for(let i = 0; i < arr.length; i++){
    document.getElementById('list').innerHTML += `
    <div>
      <h2>${arr[i].name}</h2>
      <p>${(arr[i].rightHanded) ? 'right handed' : 'left handed'}</p>
      <p>${arr[i].age} years old</p>
    </div>
    `
  }
}

renderList(data)

const sortArr = () => {
  if(sortType === "Name A - Z") {
    displayedArr.sort((a, b) => (a.name < b.name) ? -1 : 1);
  } else if(sortType === "Name Z - A") {
    displayedArr.sort((a, b) => (a.name > b.name) ? -1 : 1);
  } else if(sortType === "Age ASC") {
    displayedArr.sort((a, b) => a.age - b.age);
  } else if(sortType === "Age DESC") {
    displayedArr.sort((a, b) => b.age - a.age);
  }
  
  renderList(displayedArr)
}

const filterArr = () => {
  displayedArr = [...data]
  if(filterType === "Right Handed") {
    displayedArr = displayedArr.filter(person => person.rightHanded)
  } else if(filterType === "Left Handed") {
    displayedArr = displayedArr.filter(person => !person.rightHanded)
  }
  renderList(displayedArr)
}
</script>



</body>
 
</html>