<!DOCTYPE html>
<html>
<head>
    <title>Minha Página</title>
    <style>
        .container {
            display: flex;
        }

        .sidebar {
            width: 200px;
            background-color: #f1f1f1;
            padding: 10px;
            transition: all 0.3s;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .sidebar.collapsed {
            width: 60px;
            padding: 10px 0;
        }

        .sidebar h3 {
            margin: 0;
            padding: 10px;
            font-size: 18px;
            text-align: center;
            background-color: #ddd;
            color: #333;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 10px 0;
        }

        .sidebar ul li {
            margin-bottom: 5px;
        }

        .sidebar ul li a {
            display: block;
            padding: 5px 10px;
            background-color: #eee;
            color: #333;
            text-decoration: none;
        }

        .sidebar ul li a:hover {
            background-color: #ddd;
        }

        .toggle-btn {
            cursor: pointer;
            font-size: 20px;
            margin-bottom: 10px;
            text-align: center;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.toggle-btn').click(function() {
                $('.sidebar').toggleClass('collapsed');
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <?php
        $sidebarCollapsed = true; // Defina essa variável com base na lógica do seu aplicativo
        $sidebarClass = $sidebarCollapsed ? 'collapsed' : '';
        ?>

        <div class="sidebar <?php echo $sidebarClass; ?>">
            <h3>Barra Lateral</h3>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
            </ul>
        </div>

        <div class="main-content">
            <h1>Conteúdo Principal</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer scelerisque mi et nisl consectetur, non efficitur orci bibendum.</p>
            <!-- Lógica para controlar a mudança do estado da barra lateral usando PHP -->
            <?php
            if ($sidebarCollapsed) {
                echo '<div class="toggle-btn" onclick="toggleSidebar()">&#9776;</div>';
            } else {
                echo '<div class="toggle-btn" onclick="toggleSidebar()">&times;</div>';
            }
            ?>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            $('.sidebar').toggleClass('collapsed');
        }
    </script>
</body>
</html>
