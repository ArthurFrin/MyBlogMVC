# MyBlogMVC

## Author
**Arthur FRIN**

## Context
This project is an exercise from the ESGI B3 IW course. The goal is to implement a PHP MVC application using a mini-framework created during class.

## Technologies Used
- PHP
- Custom PHP Mini MVC Framework (built in class)
- CSS
- MySQL
- Docker

## Installation Guide

### Step 1: Create the `.env` File
- Copy the `.env.example` file and rename it to `.env`.
- This project will work with the default settings by just copying and pasting.

### Step 2: Install Docker
- If you do not have Docker installed, please follow the official installation guide for your operating system:

  - [Docker for macOS](https://docs.docker.com/desktop/install/mac-install/)
  - [Docker for Windows](https://docs.docker.com/desktop/install/windows-install/)
  - [Docker for Linux](https://docs.docker.com/desktop/install/linux-install/)


### Step 3: Build and Run the Docker Containers
- At the root of the project, run the following command:

```bash
docker-compose up -d --build
```

This will build and start the Docker containers in detached mode.

### Step 4: Access the Project
- Once the Docker containers are running, the project will be accessible at:

http://localhost:8080

### Step 5: Database Initialization
- The database is automatically initialized with the SQL script `init.sql`.

### Adminer
- Adminer, a web-based database management tool, is available at:

http://localhost:8081

You can use Adminer to manage your MySQL database.

---

Enjoy working with **MyBlogMVC**