require('dotenv').config()
const knex = require('knex')({
    client: 'mysql2', // or 'mysql', 'pg', etc.
    connection: {
        host: process.env.MAINDB_HOST,
        user: process.env.MAINDB_USER,
        password: process.env.MAINDB_PASS,
        database: 'db_sii',
        port: process.env.MAINDB_PORT
    },
    debug: false
});

module.exports = knex
