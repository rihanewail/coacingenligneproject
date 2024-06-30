<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="./sytles/add curse.css" />
  
        <div class="form-section">
            <h2>Add Meal</h2>
           

                <form id="addMealForm"action="{{ route('repas.store') }}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="itemName">Item Name:</label>
                        <input type="text" id="itemName" name="itemName" required class="form-control">
                    </div>
              
                    <div class="form-group">
                        <label for="Calories">Calories</label>
                        <input type="number" class="form-control" id="Calories" name="Calories" placeholder="Enter calories" required>
                    </div>
                    <div class="form-group">
                        <label for="periode">Period</label>
                        <select class="form-control" id="periode" name="periode">
                            <option value="morning">Morning</option>
                            <option value="noon">Noon</option>
                            <option value="evening">Evening</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="heure">Time</label>
                        <input type="time" class="form-control" id="heure" name="heure" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>




{{--  
                <!-- قسم الوجبة -->
                <div class="form-group">
                    <label for="mealName">Meal Name</label>
                    <input type="text" id="mealName" name="mealName" required>
                </div>
                <div class="form-group">
                    <label for="mealDate">Date</label>
                    <input type="datetime-local" id="mealDate" name="mealDate" required>
                </div>
                <div class="form-group">
                    <label for="mealDescription">Description</label>
                    <textarea id="mealDescription" name="mealDescription" rows="4" required></textarea>
                </div>
            </form>
        </div>  --}}
        {{--  <div class="form-section" >
            <!-- قسم العناصر -->  --}}

{{--  
            <button type="button" class="btn" id="addItemBtn"><i class="fas fa-plus"></i> Add Item</button>
        </div>
    </div>

    <button type="submit" class="submit">submit</button>
</div>  --}}
{{--  <footer>
    <div class="footer-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Use</a>
        <a href="#">Contact Us</a>
    </div>
    <p>&copy; 2023 Nutrifitness. All rights reserved.</p>
</footer>

<script>
    function toggleNavigation() {
      var navInterface = document.querySelector('.navigation-interface');
      navInterface.classList.toggle('show');
    }
    </script>  --}}
</body>
</html>

{{-- Extend your main layout --}}

{{--  <div class="container">
    <h2>Add New Meal</h2>
    <div class="row">
        <div class="col-md-8">
            {{-- Form to create a new meal --}}
           
        </div>
    </div>
</div>  --}}
