const express = require('express');
const bodyParser = require('body-parser');
const mysql = require('mysql');

const app = express();

const PORT = 3001;

const pool = mysql.createPool({
  connectionLimit: 10,
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'cadastro'
});

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

app.get('/api/saldo/:id', (req, res) => {
  const { id } = req.params;
  
  pool.query(
    `SELECT 
      (SELECT IFNULL(SUM(valor), 0) FROM recebimento WHERE id_pessoa = ?) - 
      (SELECT IFNULL(SUM(valor), 0) FROM despesa WHERE id_pessoa = ?) AS saldo`,
    [id, id],
    (error, results) => {
      if (error) res.status(500).send(error);
      else res.send(results[0]);
    }
  );
});

app.listen(PORT, () => {
  console.log(`Server running on port ${PORT}`);
});