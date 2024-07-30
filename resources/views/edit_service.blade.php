<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
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
        <form action="{{ url('/admin/edit-service/'.$services->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="{{ $services->title }}" required>
            </div>
            <div>
                <label for="description">Description:</label>
                <textarea id="description" name="description"  required>{{ $services->description }}</textarea>
            </div>
            <div>
                <button type="submit">Modifier Service</button>
            </div>
        </form>
    </div>

</body>
</html>
