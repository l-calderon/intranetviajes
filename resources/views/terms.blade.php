<!DOCTYPE html>
<html>

<head>
    <title>Términos y Condiciones</title>
    <style>
        /* Overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        /* Popup */
        .popup {
            background: white;
            padding: 20px;
            border-radius: 5px;
            width: 80%;
            max-width: 500px;
            text-align: center;
        }

        .popup h1 {
            margin-top: 0;
        }

        .popup p {
            margin: 20px 0;
        }

        .popup button {
            padding: 10px 20px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .popup button:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <div class="overlay" id="termsOverlay">
        <div class="popup">
            <h1>Términos y Condiciones</h1>
            <p>Texto de los términos y condiciones.</p>
            <form method="POST" action="{{ route('terms.accept') }}">
                @csrf
                <button type="submit">Acepto</button>
            </form>
        </div>
    </div>

    <script>
        // Mostrar el popup cuando se carga la página
        window.onload = function() {
            document.getElementById('termsOverlay').style.display = 'flex';
        };
    </script>
</body>

</html>