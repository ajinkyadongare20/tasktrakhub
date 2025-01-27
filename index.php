[33mc8f116b[m[33m ([m[1;36mHEAD -> [m[1;32mtasktrakhub_ui[m[33m, [m[1;31morigin/tasktrakhub_ui[m[33m)[m wordpress installtion process done
[1mdiff --git a/tasktrakhub/.htaccess b/tasktrakhub/.htaccess[m
[1mnew file mode 100644[m
[1mindex 0000000..6a84812[m
[1m--- /dev/null[m
[1m+++ b/tasktrakhub/.htaccess[m
[36m@@ -0,0 +1,16 @@[m
[32m+[m
[32m+[m[32m# BEGIN WordPress[m
[32m+[m[32m# The directives (lines) between "BEGIN WordPress" and "END WordPress" are[m
[32m+[m[32m# dynamically generated, and should only be modified via WordPress filters.[m
[32m+[m[32m# Any changes to the directives between these markers will be overwritten.[m
[32m+[m[32m<IfModule mod_rewrite.c>[m
[32m+[m[32mRewriteEngine On[m
[32m+[m[32mRewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}][m
[32m+[m[32mRewriteBase /wordpess_projects/tasktrakhub_project/tasktrakhub/tasktrakhub/[m
[32m+[m[32mRewriteRule ^index\.php$ - [L][m
[32m+[m[32mRewriteCond %{REQUEST_FILENAME} !-f[m
[32m+[m[32mRewriteCond %{REQUEST_FILENAME} !-d[m
[32m+[m[32mRewriteRule . /wordpess_projects/tasktrakhub_project/tasktrakhub/tasktrakhub/index.php [L][m
[32m+[m[32m</IfModule>[m
[32m+[m
[32m+[m[32m# END WordPress[m
\ No newline at end of file[m
[1mdiff --git a/tasktrakhub/index.php b/tasktrakhub/index.php[m
[1mnew file mode 100644[m
[1mindex 0000000..cc2a532[m
[1m--- /dev/null[m
[1m+++ b/tasktrakhub/index.php[m
[36m@@ -0,0 +1,17 @@[m
[32m+[m[32m<?php[m
[32m+[m[32m/**[m
[32m+[m[32m * Front to the WordPress application. This file doesn't do anything, but loads[m
[32m+[m[32m * wp-blog-header.php which does and tells WordPress to load the theme.[m
[32m+[m[32m *[m
[32m+[m[32m * @package WordPress[m
[32m+[m[32m */[m
[32m+[m
[32m+[m[32m/**[m
[32m+[m[32m * Tells WordPress to load the WordPress theme and output it.[m
[32m+[m[32m *[m
[32m+[m[32m * @var bool[m
[32m+[m[32m */[m
[32m+[m[32mdefine( 'WP_USE_THEMES', true );[m
[32m+[m
[32m+[m[32m/** Loads the WordPress Environment and Template */[m
[32m+[m[32mrequire __DIR__ . '/wp-blog-header.php';[m
[1mdiff --git a/tasktrakhub/license.txt b/tasktrakhub/license.txt[m
[1mnew file mode 100644[m
[1mindex 0000000..90cf538[m
[1m--- /dev/null[m
[1m+++ b/tasktrakhub/license.txt[m
[36m@@ -0,0 +1,384 @@[m
[32m+[m[32mWordPress - Web publishing software[m
[32m+[m
[32m+[m[32mCopyright 2011-2024 by the contributors[m
[32m+[m
[32m+[m[32mThis program is free software; you can redistribute it and/or modify[m
[32m+[m[32mit under the terms of the GNU General Public License as published by[m
[32m+[m[32mthe Free Software Foundation; either version 2 of the License, or[m
[32m+[m[32m(at your option) any later version.[m
[32m+[m
[32m+[m[32mThis program is distributed in the hope that it will be useful,[m
[32m+[m[32mbut WITHOUT ANY WARRANTY; without even the implied warranty of[m
[32m+[m[32mMERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the[m
[32m+[m[32mGNU General Public License for more details.[m
[32m+[m
[32m+[m[32mYou should have received a copy of the GNU General Public License[m
[32m+[m[32malong with this program; if not, write to the Free Software[m
[32m+[m[32mFoundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA[m
[32m+[m
[32m+[m[32mThis program incorporates work covered by the following copyright and[m
[32m+[m[32mpermission notices:[m
[32m+[m
[32m+[m[32m  b2 is (c) 2001, 2002 Michel Valdrighi - https://cafelog.com[m
[32m+[m
[32m+[m[32m  Wherever third party code has been used, credit has been given in the code's[m
[32m+[m[32m  comments.[m
[32m+[m
[32m+[m[32m  b2 is released under the GPL[m
[32m+[m
[32m+[m[32mand[m
[32m+[m
[32m+[m[32m  WordPress - Web publishing software[m
[32m+[m
[32m+[m[32m  Copyright 2003-2010 by the contributors[m
[32m+[m
[32m+[m[32m  WordPress is released under the GPL[m
[32m+[m
[32m+[m[32m=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=[m
[32m+[m
[32m+[m[32m                    GNU GENERAL PUBLIC LICENSE[m
[32m+[m[32m                       Version 2, June 1991[m
[32m+[m
[32m+[m[32m Copyright (C) 1989, 1991 Free Software Foundation, Inc.,[m
[32m+[m[32m 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA[m
[32m+[m[32m Everyone is permitted to copy and distribute verbatim copies[m
[32m+[m[32m of this license document, but changing it is not allowed.[m
[32m+[m
[32m+[m[32m                            Preamble[m
[32m+[m
[32m+[m[32m  The licenses for most software are designed to take away your[m
[32m+[m[32mfreedom to share and change it.  By contrast, the GNU General Public[m
[32m+[m[32mLicense is intended to guarantee your freedom to share and change free[m
[32m+[m[32msoftware--to make sure the software is free for all its users.  This[m
[32m+[m[32mGeneral Public License applies to most of the Free Software[m
[32m+[m[32mFoundation's software and to any other program whose authors commit to[m
[32m+[m[32musing it.  (Some other Free Software Foundation software is covered by[m
[32m+[m[32mthe GNU Lesser General Public License instead.)  You can apply it to[m
[32m+[m[32myour programs, too.[m
[32m+[m
[32m+[m[32m  When we speak of free software, we are referring to freedom, not[m
[32m+[m[32mprice.  Our General Public Licenses are designed to make sure that you[m
[32m+[m[32mhave the freedom to distribute copies of free software (and charge for[m
[32m+[m[32mthis service if you wish), that you receive source code or can get it[m
[32m+[m[32mif you want it, that you can change the software or use pieces of it[m
[32m+[m[32min new free programs; and that you know you can do these things.[m
[32m+[m
[32m+[m[32m  To protect your rights, we need to make restrictions that forbid[m
[32m+[m[32manyone to deny you these rights or to ask you to surrender the rights.[m
[32m+[m[32mThese restrictions translate to certain responsibilities for you if you[m
[32m+[m[32mdistribute copies of the software, or if you modify it.[m
[32m+[m
[32m+[m[32m  For example, if you distribute copies of such a program, whether[m
[32m+[m[32mgratis or for a fee, you must give the recipients all the rights that[m
[32m+[m[32myou have.  You must make sure that they, too, receive or can get the[m
[32m+[m[32msource code.  And you must show them these terms so they know their[m
[32m+[m[32mrights.[m
[32m+[m
[32m+[m[32m  We protect your rights with two steps: (1) copyright the software, and[m
[32m+[m[32m(2) offer you this license which gives you legal permission to copy,[m
[32m+[m[32mdistribute and/or modify the software.[m
[32m+[m
[32m+[m[32m  Also, for each author's protection and ours, we want to make certain[m
[32m+[m[32mthat everyone understands that there is no warranty for this free[m
[32m+[m[32msoftware.  If the software is modified by someone else and passed on, we[m
[32m+[m[32mwant its recipients to know that what they have is not the original, so[m
[32m+[m[32mthat any problems introduced by others will not reflect on the original[m
[32m+[m[32mauthors' reputations.[m
[32m+[m
[32m+[m[32m  Finally, any free program is threatened constantly by software[m
[32m+[m[32mpatents.  We wish to avoid the danger that redistributors of a free[m
[32m+[m[32mprogram will individually obtain patent licenses, in effect making the[m
[32m+[m[32mprogram proprietary.  To prevent this, we have made it clear that any[m
[32m+[m[32mpatent must be licensed for everyone's free use or not licensed at all.[m
[32m+[m
[32m+[m[32m  The precise terms and conditions for copying, distribution and[m
[32m+[m[32mmodification follow.[m
[32m+[m
[32m+[m[32m                    GNU GENERAL PUBLIC LICENSE[m
[32m+[m[32m   TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION[m
[32m+[m
[32m+[m[32m  0. This License applies to any program or other work which contai