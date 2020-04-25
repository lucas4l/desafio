
    </style>
</head>
<body>
    <form method="get" action="contador02.php">

        Inicio: <input type="number" name="ini" max="100" min="0" value="0">
        Final: <input type="number" name="fini" max="100" min="0" value="0">
        Incremento:
      <select name="selec">
          <?php
            $n = 1;
            while ($n <= 10) {
               echo
               "<option name='inc'>$n</option>";
               $n++;
            }
          ?>
      </select>
        <input type="submit" value="Enviar"/>
    </form>



</body>
</html>