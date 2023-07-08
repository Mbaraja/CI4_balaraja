# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
# CI4_balaraja

- UAS PEMWEB
- Nama   : M Baraja Rahardiansyah
- NIM    : A11.2022.14716
- Kelp   : A11.4219

screenshot :

-LOGIN DAN REGISTER :

1. LOGIN
<img width="1440" alt="Screen Shot 2023-07-08 at 08 20 43" src="https://github.com/Mbaraja/CI4_balaraja/assets/112961954/f09943cd-eb94-4438-a495-add24b1e15dd">

2. REGISTER
<img width="1440" alt="register" src="https://github.com/Mbaraja/CI4_balaraja/assets/112961954/3381d3f5-08d8-49b8-a9e6-661802e1f6cc">

BERANDA :

1. HOME
<img width="1440" alt="home" src="https://github.com/Mbaraja/CI4_balaraja/assets/112961954/6a5b7d2f-7020-45ae-bd41-ae2ffe41ab06">

2. KERANJANG
<img width="1440" alt="keranjang" src="https://github.com/Mbaraja/CI4_balaraja/assets/112961954/268663af-db03-48a7-814a-dfa2f7b0f851">

3. PRODUK 
<img width="1440" alt="produk" src="https://github.com/Mbaraja/CI4_balaraja/assets/112961954/d5ec097a-a61e-4219-9d3d-ccad9fc907d8">

4. MANAJEMEN PENGGUNA
<img width="1440" alt="manajemen pengguna" src="https://github.com/Mbaraja/CI4_balaraja/assets/112961954/709041a3-ed19-4d88-987f-921520e4ec77">


