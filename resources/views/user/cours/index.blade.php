{{--  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Items</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('dashboard')}}/assets/vendors/add curse.css" />
</head>
{{--  --}}
    {{--  <div class="containere">
      <h2>Add Items</h2>
      <form id="addItemForm">
        <div class="form-section">
          <div class="form-group">
            <label for="itemName">Item Name</label>
            <input type="text" id="itemName" name="itemName" required>
          </div>
          <div class="form-group">
            <label for="itemType">Type</label>
            <select id="itemType" name="itemType" required>
              <option value="vegetable"> 🥦
                Vegetable</option>
              <option value="fruit">🍎 Fruit</option>
              <option value="grain">🌾Grain</option>
              <option value="protein">🍗Protein</option>
              <option value="dairy">🥛Dairy</option>
            </select>
          </div>
          <div class="form-group">
            <label for="itemQuantity">Quantity (grams)</label>
            <input type="number" id="itemQuantity" name="itemQuantity" required>
          </div>
          <button type="button" class="btn" id="addItemBtn"><i class="fas fa-plus"></i> Add Item</button>
        </div>
        <div id="itemList">
          <!-- Items will be dynamically added here -->
        </div>
        <button type="submit" class="submit">Submit</button>
      </form>
    </div>
  </div>

  <sc
  <script>
    function toggleNavigation() {
      var navInterface = document.querySelector('.navigation-interface');
      navInterface.classList.toggle('show');
    }
    </script>
</body>

</html>    --}}


{{--  @extends('dashboard.layout.layout')  --}}

{{--  @section('body')  --}}

{{--  <html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Items</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="./sytles/add curse.css" />
  @livewireStyles
</head>
<body>

<div class="container mt-4">
    <title>Add Items</title>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('cours.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="itemName">Item Name:</label>
            <input type="text" id="itemName" name="itemName" required class="form-control">
        </div>
        <div class="form-group">
            <label for="itemType">Type:</label>
            <select id="itemType" name="itemType" required class="form-control">
                <option value="vegetable">🥦 Vegetable</option>
                <option value="fruit">🍎 Fruit</option>
                <option value="grain">🌾 Grain</option>
                <option value="protein">🍗 Protein</option>
                <option value="dairy">🥛 Dairy</option>
            </select>
        </div>
        <div class="form-group">
            <label for="itemQuantity">Quantity (grams):</label>
            <input type="number" id="itemQuantity" name="itemQuantity" required class="form-control">
        </div>
        {{--  <button type="button" class="btn btn-primary" id="addItemBtn"><i class="fas fa-plus"></i> Add Item</button>  --}}

        {{--  <div id="itemList" class="mt-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Items will be dynamically added here -->
                </tbody>
            </table>
        </div>
        <button type="submit" class="btn btn-success">Submit Course</button>
    </form>
</div>
<div>

    @livewire('app-tascks')
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const addItemBtn = document.getElementById('addItemBtn');
    const itemList = document.querySelector('#itemList tbody');
    const itemName = document.getElementById('itemName');
    const itemType = document.getElementById('itemType');
    const itemQuantity = document.getElementById('itemQuantity');

    addItemBtn.addEventListener('click', function() {
        const name = itemName.value;
        const type = itemType.value;
        const quantity = itemQuantity.value;

        if (name && type && quantity) {
            const row = `<tr>
                            <td>${name}</td>
                            <td>${type}</td>
                            <td>${quantity} grams</td>
                            <input type="hidden" name="items[]" value="${name},${type},${quantity}">
                        </tr>`;
            itemList.innerHTML += row;

            // Clear the input fields
            itemName.value = '';
            itemType.value = '';
            itemQuantity.value = '';
        } else {
            alert('Please fill all fields before adding an item.');
        }
    });
});
</script>
@livewireScripts
</body>
</html>  --}}
















{{--  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Items</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('dashboard')}}/assets/vendors/add curse.css" />
</head>
{{--  --}}
    {{--  <div class="containere">
      <h2>Add Items</h2>
      <form id="addItemForm">
        <div class="form-section">
          <div class="form-group">
            <label for="itemName">Item Name</label>
            <input type="text" id="itemName" name="itemName" required>
          </div>
          <div class="form-group">
            <label for="itemType">Type</label>
            <select id="itemType" name="itemType" required>
              <option value="vegetable"> 🥦
                Vegetable</option>
              <option value="fruit">🍎 Fruit</option>
              <option value="grain">🌾Grain</option>
              <option value="protein">🍗Protein</option>
              <option value="dairy">🥛Dairy</option>
            </select>
          </div>
          <div class="form-group">
            <label for="itemQuantity">Quantity (grams)</label>
            <input type="number" id="itemQuantity" name="itemQuantity" required>
          </div>
          <button type="button" class="btn" id="addItemBtn"><i class="fas fa-plus"></i> Add Item</button>
        </div>
        <div id="itemList">
          <!-- Items will be dynamically added here -->
        </div>
        <button type="submit" class="submit">Submit</button>
      </form>
    </div>
  </div>

  <sc
  <script>
    function toggleNavigation() {
      var navInterface = document.querySelector('.navigation-interface');
      navInterface.classList.toggle('show');
    }
    </script>
</body>

</html>    --}}


{{--  @extends('dashboard.layout.layout')  --}}

{{--  @section('body')  --}}

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Items</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="./sytles/add curse.css" />
  @livewireStyles
</head>
<body>

    <div class="container mt-4">

@livewire('add-course')

    @livewire('affichec-cours')
    <div>

</div>
{{--
<script>
document.addEventListener('DOMContentLoaded', function() {
    const addItemBtn = document.getElementById('addItemBtn');
    const itemList = document.querySelector('#itemList tbody');
    const itemName = document.getElementById('itemName');
    const itemType = document.getElementById('itemType');
    const itemQuantity = document.getElementById('itemQuantity');

    addItemBtn.addEventListener('click', function() {
        const name = itemName.value;
        const type = itemType.value;
        const quantity = itemQuantity.value;

        if (name && type && quantity) {
            const row = `<tr>
                            <td>${name}</td>
                            <td>${type}</td>
                            <td>${quantity} grams</td>
                            <input type="hidden" name="items[]" value="${name},${type},${quantity}">
                        </tr>`;
            itemList.innerHTML += row;

            // Clear the input fields
            itemName.value = '';
            itemType.value = '';
            itemQuantity.value = '';
        } else {
            alert('Please fill all fields before adding an item.');
        }
    });
});
</script>  --}}
@livewireScripts
</body>
</html>
