# PHP From Scratch | Beginner to Advanced

This repository contains everything I'm working on as I go through the **PHP From Scratch** course — a complete deep dive into PHP, starting from the basics and ending with building a full job listing website using nothing but vanilla PHP.

---

## 🚀 What I'm Learning

This course is all about understanding PHP from the ground up, without relying on frameworks. Here's what I'm focusing on:

- The fundamentals of PHP: variables, data types, arrays, loops, functions, OOP, etc.
- Working with PHP superglobals like `$_GET`, `$_POST`, `$_SESSION`, and `$_COOKIE`
- Using PDO to interact with MySQL databases securely
- Writing clean, modular PHP using namespaces and PSR-4 autoloading
- Building my own Laravel-style router (yeah, including middleware!)
- Creating a session-based authentication system
- Validating and sanitizing user input to avoid common security issues

---

## 📚 Course Structure

The course is split into two main parts:

### Part 1: PHP Fundamentals

I started by learning the basics through a set of focused modules:

1. **Data Types & Variables**
2. **Arrays & Iteration**
3. **Control Structures & Conditionals**
4. **Functions & Scope**
5. **Object-Oriented Programming**
6. **Superglobals**
7. **Database Integration with PDO**

### Part 2: Building a Job Listing Website

Now I'm applying what I learned by building a full web app from scratch. No frameworks, no libraries — just raw PHP.

Here’s what I’m doing in this project:

- **Custom Router**  
  I built my own Laravel-like router that supports HTTP methods, route parameters, and middleware. It’s gone through a bunch of refactors to keep things clean.

- **Project Structure**  
  I split the app into two main directories:

<pre>
/Framework → Core logic (router, session, validation, etc.)
/App → Controllers, views, and business logic
</pre>


- **CRUD Operations**  
The app includes full CRUD functionality for job listings.

- **Authentication**  
I implemented user registration, login, logout, and protected routes using custom middleware.

- **Search & Filtering**  
There’s a search feature to filter jobs by keyword or location.

- **Security**  
I'm making sure all data is validated, sanitized, and safely stored using prepared statements with PDO.

---

## 🧠 Why I'm Doing This

I wanted to really understand how things work behind the scenes before jumping into frameworks like Laravel. This course has been perfect for that — it’s helping me build solid fundamentals and write better PHP.

---

## 📁 Project Overview
<pre>
/
├── App/
│   ├── Controllers/
│   ├── Views/
│   └── ...
├── Framework/
│   ├── Router.php
│   ├── Database.php
│   └── ...
├── public/
│   └── index.php
└── README.md
</pre>

---

## 📌 Notes

This repo is my personal learning space. I’ll be committing all the modules and the project progress here as I go. Feel free to explore — or reach out if you’re learning PHP too!

---

## 📜 Disclaimer

The structure and content are based on a course I’m following. Credit to the original instructor for the curriculum. I’m just documenting my journey through it here.