<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Skill</title>
   
  
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff; /* White background */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for a card-like effect */
            border-radius: 8px; /* Rounded corners */
        }

        /* Style for form elements */
        .form div {
            margin-bottom: 15px;
        }

        .form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form input[type="text"],
        .form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc; /* Light gray border */
            border-radius: 4px; /* Rounded corners for inputs */
            box-sizing: border-box; /* Ensure padding does not affect width */
        }

        .form button {
            width: 100%;
            padding: 10px;
            background-color: #ff6600; /* Orange background */
            color: #fff; /* White text */
            border: none;
            border-radius: 4px;
            cursor: pointer; /* Pointer cursor on hover */
            font-size: 16px;
        }

        .form button:hover {
            background-color: #e65c00; /* Darker orange on hover */
        }
    </style>
</head>
<body>
  

     
        <div class="form">
                <h1>Edit Skill</h1>
                <form action="{{ url('/admin/edit-skills/'.$skills->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Skill Name:</label>
                        <input type="text" id="name" name="name" value="{{ $skills->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="percentage">Percentage:</label>
                        <input type="number" id="percentage" name="percentage" value="{{ $skills->percentage }}" min="0" max="100" required>
                    </div>

                    <div>
                            <label>Category:</label>
                            <input type="checkbox" id="Tech" name="category" value="Tech">
                            <label for="category1">Technique</label>
                            <input type="checkbox" id="Pro" name="category" value="Pro">
                            <label for="category2">Professionnel</label>
                        </div>
                    <button type="submit">Update Skill</button>
                </form>
            </div>
    
</body>
</html>
