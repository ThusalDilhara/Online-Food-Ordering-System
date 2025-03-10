🍔 Online Food Ordering System  

A responsive Online Food Ordering System built using **HTML, CSS, JavaScript, PHP, and PHPMyAdmin**. This platform enables users to browse menu items, add them to the cart, and place orders seamlessly.  

## 🚀 Features  

✅ **User-Friendly Interface** – Responsive and intuitive design for easy navigation  
✅ **Menu Display** – View available food items with descriptions and prices  
✅ **Cart System** – Add, update, or remove items from the cart before checkout  
✅ **Order Management** – Users can place orders, and admins can manage them  
✅ **Secure Database** – Orders and user details are managed using **PHPMyAdmin & MySQL** 
✅ **Cutomer Review** – Customers can add reviews


## 🛠️ Tech Stack  

- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL (PHPMyAdmin)  

## 📂 Project Structure  

```
/online-food-ordering-system  
│── /assets        # Images, icons, and other static files  
│── /css           # Stylesheets  
│── /js            # JavaScript files  
│── /php           # PHP scripts (database connection, order handling, etc.)  
│── /sql           # Database schema file  
│── index.php      # Main entry point  
│── cart.php       # Shopping cart page  
│── order.php      # Order processing  

```

## ⚙️ Setup Instructions  

1️⃣ Clone the repository:  
```sh
git clone https://github.com/thusal-dilhara/online-food-ordering-system.git
```  

2️⃣ Import the database:  
- Open **PHPMyAdmin**  
- Create a new database (e.g., `food_ordering_db`)  
- Import `sql/database.sql`  

3️⃣ Configure database connection:  
- Open `/php/config.php`  
- Update the database credentials:  
```php
$servername = "localhost";
$username = "root"; // Change if necessary
$password = "";
$database = "food_ordering_db";
$conn = new mysqli($servername, $username, $password, $database);
```  

4️⃣ Start the server:  
- Use **XAMPP** or **WAMP** to start `Apache` and `MySQL`  
- Open your browser and go to:  
  ```
  http://localhost/online-food-ordering-system
  ```

## 🎯 Future Enhancements  

🔹 **Online Payment Integration**  
🔹 **Order Tracking System**  



## 📌 Contributing  

Contributions are welcome! Feel free to **fork** this repository and submit a **pull request**.  





💡 **Let's Connect!** If you have any questions or feedback, feel free to reach out. 🚀  
```
