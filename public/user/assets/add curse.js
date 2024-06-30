// Function to handle adding new item section
function addItemSection() {
    const itemList = document.getElementById("itemList");
    const newItemSection = document.createElement("div");
    newItemSection.classList.add("item");
  
    const itemNumber = itemList.children.length + 1;
    newItemSection.innerHTML = `
      <h3>Item ${itemNumber}</h3>
      <div class="form-group">
        <label for="itemName${itemNumber}">Item Name</label>
        <input type="text" id="itemName${itemNumber}" name="itemName${itemNumber}" required>
      </div>
      <div class="form-group">
        <label for="itemType${itemNumber}">Type</label>
        <select id="itemType${itemNumber}" name="itemType${itemNumber}" required>
          <option value="vegetable">Vegetable</option>
          <option value="fruit">Fruit</option>
          <option value="grain">Grain</option>
          <option value="protein">Protein</option>
          <option value="dairy">Dairy</option>
        </select>
      </div>
      <div class="form-group">
        <label for="itemQuantity${itemNumber}">Quantity (grams)</label>
        <input type="number" id="itemQuantity${itemNumber}" name="itemQuantity${itemNumber}" required>
      </div>
    `;
  
    itemList.appendChild(newItemSection);
  }
  
  // Event listener for the "Add Item" button
  document.getElementById("addItemBtn").addEventListener("click", addItemSection);
  