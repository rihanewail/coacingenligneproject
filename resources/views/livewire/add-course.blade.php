
{{--  <div class="container mt-4">
    <title>Add Items</title>



        <div class="form-group">
            <label for="itemName">Item Name:</label>
            <input type="text" id="itemName" wire:model="name" required class="form-control">
        </div>
        <div class="form-group">
            <label for="itemType">Type:</label>
            <select id="itemType" wire:model="type" required class="form-control">
                <option value="vegetable">🥦 Vegetable</option>
                <option value="fruit">🍎 Fruit</option>
                <option value="grain">🌾 Grain</option>
                <option value="protein">🍗 Protein</option>
                <option value="dairy">🥛 Dairy</option>
            </select>
        </div>
        <div class="form-group">
            <label for="itemQuantity">Quantity (grams):</label>
            <input type="number" id="itemQuantity" wire:model="quantity" required class="form-control">
        </div>
        {{--  <button type="button" wire:click="addItem" class="btn btn-primary" id="addItemBtn"><i class="fas fa-plus"></i> Add Item</button>  --}}

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
        <button wire:click="createCourse" class="btn btn-success">Submit Course</button>
</div>  --}}




  <div>




        <h2>Add Items to Course</h2><div>
            <label for="name">Name</label>
            <input type="text" id="name" wire:model="name">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="type">Type</label>
            <input type="text" id="type" wire:model="type">
            @error('type') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="quantity">Quantity</label>
            <input type="text" id="quantity" wire:model="quantity">
            @error('quantity') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button wire:click="addItem">Add Item</button>
        <button id="addItemBtn" wire:click="addItem">Add Item</button>
  @if (session()->has('error'))
        <div class="alert alert-dangerb">
            {{ session('error') }}
        </div>
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    {{--  @error('name')
    <span class="error">{{ $message }}</span>     @enderror
    @error('type')
    <span class="error">{{ $message }}</span>
    @enderror
    @error('Quantity')
    <span class="error">{{ $message }}</span>
    @enderror  --}}
    <table id="itemList">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['type'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <input type="hidden" name="items[]" value="{{ $item['name'] }},{{ $item['type'] }},{{ $item['quantity'] }}">
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>

        <button wire:click="createCourse">Emit PostAdded Event</button>

        {{--  <button wire:click="createCourse">Create Course</button>  --}}
    </div>
</div>
