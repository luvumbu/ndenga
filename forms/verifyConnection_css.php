<style>
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap');

body {
    background-color: #f4f4f8;
    font-family: 'Rajdhani', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.form-container {
    width: 360px;
    padding: 25px;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    border: 1px solid #d1d1d1;
}

.form-container h2 {
    color: #1a1a1d;
    font-size: 18px;
    margin-bottom: 15px;
}

.form-container form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.form-container label {
    width: 100%;
    text-align: left;
    margin-bottom: 5px;
    font-size: 14px;
    color: #333;
}

.form-container input {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    background: #fafafa;
    color: #1a1a1d;
    outline: none;
}

.form-container input:focus {
    border-color: #007bff;
}

.password_forgot,
.inscrption {
    margin-top: 8px;
    text-align: center;
    width: 100%;
}

.password_forgot a,
.inscrption a {
    text-decoration: none;
    color: #007bff;
    font-size: 13px;
    font-weight: bold;
    display: inline-block;
    padding: 5px 0;
}

.password_forgot a:hover,
.inscrption a:hover {
    text-decoration: underline;
}

.submit-btn {
    margin-top: 15px;
    width: 100%;
    padding: 10px;
    background: #007bff;
    color: white;
    text-align: center;
    font-weight: bold;
    cursor: pointer;
    border-radius: 6px;
    font-size: 14px;
    transition: background 0.2s ease-in-out;
}

.submit-btn:hover {
    background: #0056b3;
}

</style> 