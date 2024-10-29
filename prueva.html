<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Gastos Semanales</title>
    <link rel="stylesheet" href="pruevagas.css">
</head>
<body>
    <div class="container">
        <h1>Registro de Gastos Semanales</h1>

        <form id="budget-form" action="" method="POST">
            <label for="budget-input">Establece tu Presupuesto Semanal:</label>
            <input type="number" name="presu" id="budget-input" placeholder="Presupuesto ($)" required>
            <button type="submit">Guardar Presupuesto</button>
        </form>

        <div class="budget-summary">
            <div class="budget-item">
                <h3>Presupuesto Asignado</h3>
                <p class="budget-value" id="presupuesto-valor">$0.00</p>
            </div>
            <div class="budget-item">
                <h3>Total Gastado</h3>
                <p class="budget-value" id="total-gastado-valor">$0.00</p>
            </div>
            <div class="budget-item">
                <h3>Saldo Disponible</h3>
                <p class="budget-value" id="saldo-valor">$0.00</p>
            </div>
        </div>

        <form id="expense-form" onsubmit="return agregarGasto();">
            <input type="date" id="date" required>
            <input type="text" id="description" placeholder="Descripción" required>
            <input type="number" id="amount" placeholder="Monto ($)" required>
            <button type="submit">Agregar Gasto</button>
        </form>

        <h2>Filtrar Gastos por Semana</h2>
        <select id="week-selector" onchange="filtrarGastos();">
            <option value="all">Todas las Semanas</option>
            <!-- Las semanas se agregarán dinámicamente aquí -->
        </select>

        <h2>Gastos Registrados</h2>
        <table id="expense-table">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Descripción</th>
                    <th>Monto ($)</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se agregarán las filas de gastos -->
            </tbody>
        </table>
    </div>

    <script>
        let presupuesto = parseFloat(localStorage.getItem('presupuesto')) || 0;
        let totalGastado = 0;
        let gastos = JSON.parse(localStorage.getItem('gastos')) || []; // Cargar gastos desde localStorage
        let semanasUnicas = new Set(); // Conjunto para almacenar semanas únicas

        // Inicializar valores en la interfaz
        document.getElementById('presupuesto-valor').textContent = presupuesto.toFixed(2);
        document.getElementById('total-gastado-valor').textContent = totalGastado.toFixed(2);
        document.getElementById('saldo-valor').textContent = (presupuesto - totalGastado).toFixed(2);

        // Función para cargar semanas únicas y gastos en la tabla
        function cargarSemanasYGastos() {
            const weekSelector = document.getElementById('week-selector');
            weekSelector.innerHTML = '<option value="all">Todas las Semanas</option>'; // Reiniciar las opciones
            gastos.forEach(gasto => {
                const semana = getISOWeek(new Date(gasto.fecha));
                semanasUnicas.add(semana);

                // Agregar fila a la tabla de gastos
                const tableBody = document.getElementById('expense-table').querySelector('tbody');
                const newRow = tableBody.insertRow();
                newRow.innerHTML = `<td>${gasto.fecha}</td><td>${gasto.descripcion}</td><td>$${gasto.monto.toFixed(2)}</td>`;
            });

            // Cargar las semanas en el selector
            semanasUnicas.forEach(semana => {
                const startDate = getStartOfWeek(semana);
                const option = document.createElement('option');
                option.value = semana;
                option.textContent = `Semana ${semana} (${startDate.toLocaleDateString()})`;
                weekSelector.appendChild(option);
            });
        }

        document.getElementById('budget-form').onsubmit = function(e) {
            e.preventDefault();
            presupuesto = parseFloat(document.getElementById('budget-input').value);
            totalGastado = 0; // Reiniciar total gastado

            // Guardar en localStorage
            localStorage.setItem('presupuesto', presupuesto);

            // Actualizar la interfaz
            document.getElementById('presupuesto-valor').textContent = presupuesto.toFixed(2);
            document.getElementById('total-gastado-valor').textContent = totalGastado.toFixed(2);
            document.getElementById('saldo-valor').textContent = presupuesto.toFixed(2);
            document.getElementById('budget-input').value = '';
        };

        function agregarGasto() {
            const fecha = document.getElementById('date').value;
            const descripcion = document.getElementById('description').value;
            const monto = parseFloat(document.getElementById('amount').value);

            totalGastado += monto;

            // Actualizar valores en la interfaz
            document.getElementById('total-gastado-valor').textContent = totalGastado.toFixed(2);
            document.getElementById('saldo-valor').textContent = (presupuesto - totalGastado).toFixed(2);

            // Almacenar el gasto en el array
            const nuevoGasto = { fecha, descripcion, monto };
            gastos.push(nuevoGasto);
            localStorage.setItem('gastos', JSON.stringify(gastos)); // Guardar gastos en localStorage

            // Obtener la semana y agregarla al conjunto de semanas únicas
            const semana = getISOWeek(new Date(fecha));
            semanasUnicas.add(semana);

            // Agregar fila a la tabla de gastos
            const tableBody = document.getElementById('expense-table').querySelector('tbody');
            const newRow = tableBody.insertRow();
            newRow.innerHTML = `<td>${fecha}</td><td>${descripcion}</td><td>$${monto.toFixed(2)}</td>`;

            // Cargar las semanas en el selector
            cargarSemanasYGastos(); // Actualizar el selector de semanas

            // Limpiar los campos del formulario de gastos
            document.getElementById('date').value = '';
            document.getElementById('description').value = '';
            document.getElementById('amount').value = '';

            return false; // Para prevenir el envío del formulario
        }

        function filtrarGastos() {
            const selectedWeek = document.getElementById('week-selector').value;
            const tableBody = document.getElementById('expense-table').querySelector('tbody');
            tableBody.innerHTML = ''; // Limpiar la tabla

            const filteredGastos = selectedWeek === 'all' ? gastos : gastos.filter(gasto => getISOWeek(new Date(gasto.fecha)) === parseInt(selectedWeek));
            filteredGastos.forEach(gasto => {
                const newRow = tableBody.insertRow();
                newRow.innerHTML = `<td>${gasto.fecha}</td><td>${gasto.descripcion}</td><td>$${gasto.monto.toFixed(2)}</td>`;
            });
        }

        function getISOWeek(date) {
            const firstMonday = new Date(date.getFullYear(), 0, 1);
            const days = (date - firstMonday) / (1000 * 60 * 60 * 24);
            return Math.ceil((days + firstMonday.getDay() + 1) / 7);
        }

        function getStartOfWeek(week) {
            const currentYear = new Date().getFullYear();
            const firstMonday = new Date(currentYear, 0, 1);
            let weekStartDate = new Date(firstMonday);

            // Calcular el primer día de la semana
            let daysToAdd = (week - 1) * 7 - firstMonday.getDay() + 1; // Asegurarse de que empiece el lunes
            weekStartDate.setDate(weekStartDate.getDate() + daysToAdd);
            return weekStartDate;
        }

        cargarSemanasYGastos(); // Cargar semanas y gastos al iniciar
    </script>
</body>
</html>
