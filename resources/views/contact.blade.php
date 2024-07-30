<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite('resources/css/app.css')

    <style>

body {
    font-family: Arial, sans-serif;
    background-color: #f4f6f9;
    margin: 0;
    padding: 0;
}

.table-container {
    width: 90%;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-left: 300px;
}

.table-header {
    padding: 20px;
    border-bottom: 1px solid #eaeaea;
}

.table-header h1 {
    margin: 0;
    font-size: 24px;
    color: #333;
}

.table-header p {
    margin: 5px 0 20px;
    color: #999;
}

.table-filters {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.table-filters button {
    background-color: #ff6600;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.table-filters button:hover {
    background-color: #e65a00;
}

.table-filters .date-range {
    display: flex;
    align-items: center;
}

.table-filters .date-range input {
    border: 1px solid #ddd;
    padding: 8px;
    border-radius: 4px;
    margin: 0 5px;
}

.styled-table {
    width: 100%;
    border-collapse: collapse;
}

.styled-table thead tr {
    background-color: #ff6600;
    color: #fff;
    text-align: left;
    font-weight: bold;
}

.styled-table th, .styled-table td {
    padding: 10px 3px;
}

.styled-table tbody tr {
    border-bottom: 2px solid #eaeaea;
    transition: background-color 0.3s;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f9f9f9;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #ff6600;
}

.styled-table tbody tr:hover {
    background-color: #f1f1f1;
}

.styled-table .highlight {
    background-color: #e0f7fa;
}

.profile-pic {
    border-radius: 50%;
    margin-right: 10px;
    vertical-align: middle;
}

.status {
    padding: 5px 10px;
    border-radius: 4px;
    color: #fff;
    font-weight: bold;
}

.status.pending {
    background-color: #ff6600;
}

.status.dispatch {
    background-color: #4caf50;
}

.pagination {
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top: 1px solid #eaeaea;
}

.pagination span {
    color: #999;
}

.pagination ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

.pagination ul li {
    margin-right: 10px;
}

.pagination ul li a {
    color: #ff6600;
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.pagination ul li a:hover {
    background-color: #ffe6cc;
}

.table-filters form {
    display: flex;
    align-items: center;
    margin: 10px 0;
    padding: 10px;
    background-color: #eee; /* Couleur de fond temporaire */
}

.table-filters input[type="text"] {
    width: 100%; /* Définit explicitement la largeur de l'input */
    margin-right: 10px; /* Espace entre l'input et le bouton */
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    color: #333; /* Couleur du texte */
}

.table-filters button[type="submit"] {
    width: 30%; /* Définit explicitement la largeur du bouton */
    padding: 8px 10px;
    background-color: #ff6600;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
    flex-shrink: 0; /* Empêche le bouton de rétrécir */
}

.table-filters button[type="submit"]:hover {
    background-color: #e65a00;
}

    </style>

</head>
<body>
<div class="sidebar">
            <div class="logo" id="user-name">
                    <!-- Le nom de l'utilisateur sera inséré ici par JavaScript -->
                </div>
                <ul>
                    <li><a href="{{ url('admin') }}">Portfolio</a></li>
                    <li><a href="{{ url('admin/service') }}" >Services</a></li>
                    <li><a href="{{ url('admin/skills') }}">Skills</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="{{ url('admin/education') }}" >Education</a></li>
                    <li><a href="{{ url('admin/about') }}" >About Me</a></li>

                </ul>
             <button class="contact-me" >Contact Me</button>
        </div>

    <div class="table-container">

    
        <div class="table-header">
            <h1>Contacts</h1>
            <p>{{ count($contacts) }} orders found</p>
            <div class="table-filters">
                <form method="GET" action="{{ url('admin/contact') }}">
                    <input type="text" name="search" placeholder="Search by Full Name" value="{{ request('search') }}" />
                    <button type="submit">Search</button>
                </form>
           </div>
        </div>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
              @foreach($contacts as $contact)
                <tr>
                    <td>
                    {{ $contact->full_name }}
                    </td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone_number }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">
            <span>Showing 01-02 of {{ count($contacts) }}</span>
            <ul>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
