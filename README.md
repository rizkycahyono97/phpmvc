# PHP MVC Project

This is a simple PHP MVC (Model-View-Controller) project. The application follows the MVC architecture to separate concerns and keep the code clean and maintainable.

## Prerequisites

Before you can run this application locally, ensure that you have the following software installed:

- **Apache Web Server** 
- **PHP 7.4 or higher**
- **MySQL** 
- **Composer**
  
## PHP MVC - Database Structure

This repository uses a **MySQL database** named `phpmvc` to manage the application's data. Below is the structure of the primary table, `mahasiswa`, and you can import the database in `app/config/phpmvc.sql`.

### Database: `phpmvc`

### Table: `mahasiswa`

This table stores data related to students. Its structure is as follows:

| Field      | Type         | Null | Key | Default | Extra          |
|------------|--------------|------|-----|---------|----------------|
| `id`       | int(11)      | NO   | PRI | NULL    | auto_increment |
| `nama`     | varchar(50)  | YES  |     | NULL    |                |
| `nrp`      | varchar(25)  | YES  |     | NULL    |                |
| `email`    | varchar(75)  | YES  |     | NULL    |                |
| `jurusan`  | varchar(30)  | YES  |     | NULL    |                |

## Installation

Follow the steps below to set up the application on your local machine or on a virtual domain.

### 1. Clone the Repository

First, clone this repository to your local machine in Apache directory:

```bash
git clone https://github.com/rizkycahyono97/phpmvc.git
cd phpmvc
http://localhost/phpmvc/public/

