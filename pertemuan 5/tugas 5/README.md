
# Latihan pertemuan ke-5

Project hitung nilai KHS dengan memakai tampilan Bootstrap.

Struktur File Tugas Pertemuan 5
📦pertemuan 5
 ┣ 📂css
 ┃ ┣ 📜bootstrap-grid.css
 ┃ ┣ 📜bootstrap-grid.css.map
 ┃ ┣ 📜bootstrap-grid.min.css
 ┃ ┣ 📜bootstrap-grid.min.css.map
 ┃ ┣ 📜bootstrap-grid.rtl.css
 ┃ ┣ 📜bootstrap-grid.rtl.css.map
 ┃ ┣ 📜bootstrap-grid.rtl.min.css
 ┃ ┣ 📜bootstrap-grid.rtl.min.css.map
 ┃ ┣ 📜bootstrap-reboot.css
 ┃ ┣ 📜bootstrap-reboot.css.map
 ┃ ┣ 📜bootstrap-reboot.min.css
 ┃ ┣ 📜bootstrap-reboot.min.css.map
 ┃ ┣ 📜bootstrap-reboot.rtl.css
 ┃ ┣ 📜bootstrap-reboot.rtl.css.map
 ┃ ┣ 📜bootstrap-reboot.rtl.min.css
 ┃ ┣ 📜bootstrap-reboot.rtl.min.css.map
 ┃ ┣ 📜bootstrap-utilities.css
 ┃ ┣ 📜bootstrap-utilities.css.map
 ┃ ┣ 📜bootstrap-utilities.min.css
 ┃ ┣ 📜bootstrap-utilities.min.css.map
 ┃ ┣ 📜bootstrap-utilities.rtl.css
 ┃ ┣ 📜bootstrap-utilities.rtl.css.map
 ┃ ┣ 📜bootstrap-utilities.rtl.min.css
 ┃ ┣ 📜bootstrap-utilities.rtl.min.css.map
 ┃ ┣ 📜bootstrap.css
 ┃ ┣ 📜bootstrap.css.map
 ┃ ┣ 📜bootstrap.min.css
 ┃ ┣ 📜bootstrap.min.css.map
 ┃ ┣ 📜bootstrap.rtl.css
 ┃ ┣ 📜bootstrap.rtl.css.map
 ┃ ┣ 📜bootstrap.rtl.min.css
 ┃ ┗ 📜bootstrap.rtl.min.css.map
 ┣ 📂js
 ┃ ┣ 📜bootstrap.bundle.js
 ┃ ┣ 📜bootstrap.bundle.js.map
 ┃ ┣ 📜bootstrap.bundle.min.js
 ┃ ┣ 📜bootstrap.bundle.min.js.map
 ┃ ┣ 📜bootstrap.esm.js
 ┃ ┣ 📜bootstrap.esm.js.map
 ┃ ┣ 📜bootstrap.esm.min.js
 ┃ ┣ 📜bootstrap.esm.min.js.map
 ┃ ┣ 📜bootstrap.js
 ┃ ┣ 📜bootstrap.js.map
 ┃ ┣ 📜bootstrap.min.js
 ┃ ┗ 📜bootstrap.min.js.map
 ┣ 📂tugas 5
 ┃ ┣ 📜khs.php
 ┃ ┗ 📜khs_go.php
 ┣ 📂vendor
 ┃ ┣ 📂composer
 ┃ ┃ ┣ 📜autoload_classmap.php
 ┃ ┃ ┣ 📜autoload_namespaces.php
 ┃ ┃ ┣ 📜autoload_psr4.php
 ┃ ┃ ┣ 📜autoload_real.php
 ┃ ┃ ┣ 📜autoload_static.php
 ┃ ┃ ┣ 📜ClassLoader.php
 ┃ ┃ ┣ 📜installed.json
 ┃ ┃ ┗ 📜LICENSE
 ┃ ┣ 📂fzaninotto
 ┃ ┃ ┗ 📂faker
 ┃ ┃ ┃ ┣ 📂.github
 ┃ ┃ ┃ ┃ ┗ 📂ISSUE_TEMPLATE
 ┃ ┃ ┃ ┃ ┃ ┗ 📜bug_report.md
 ┃ ┃ ┃ ┣ 📂.travis
 ┃ ┃ ┃ ┃ ┗ 📜xdebug.sh
 ┃ ┃ ┃ ┣ 📂src
 ┃ ┃ ┃ ┃ ┣ 📂Faker
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Calculator
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Ean.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Iban.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Inn.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Luhn.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜TCNo.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Guesser
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Name.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂ORM
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂CakePHP
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ColumnTypeGuesser.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜EntityPopulator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Populator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂Doctrine
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ColumnTypeGuesser.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜EntityPopulator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Populator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂Mandango
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ColumnTypeGuesser.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜EntityPopulator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Populator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂Propel
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ColumnTypeGuesser.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜EntityPopulator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Populator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂Propel2
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ColumnTypeGuesser.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜EntityPopulator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Populator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📂Spot
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜ColumnTypeGuesser.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜EntityPopulator.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Populator.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📂Provider
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂ar_JO
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂ar_SA
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Color.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂at_AT
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂bg_BG
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂bn_BD
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Utils.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂cs_CZ
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜DateTime.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂da_DK
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂de_AT
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂de_CH
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂de_DE
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂el_CY
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂el_GR
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂en_AU
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂en_CA
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂en_GB
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂en_HK
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂en_IN
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂en_NG
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂en_NZ
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂en_PH
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂en_SG
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂en_UG
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂en_US
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂en_ZA
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂es_AR
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂es_ES
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Color.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂es_PE
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂es_VE
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂et_EE
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂fa_IR
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂fi_FI
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂fr_BE
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂fr_CA
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂fr_CH
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂fr_FR
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂he_IL
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂hr_HR
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂hu_HU
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂hy_AM
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Color.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂id_ID
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Color.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂is_IS
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂it_CH
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂it_IT
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂ja_JP
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂ka_GE
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Color.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜DateTime.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂kk_KZ
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Color.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂ko_KR
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂lt_LT
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂lv_LV
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Color.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂me_ME
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂mn_MN
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂ms_MY
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Miscellaneous.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂nb_NO
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂ne_NP
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂nl_BE
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂nl_NL
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Color.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂pl_PL
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂pt_BR
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜check_digit.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂pt_PT
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂ro_MD
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂ro_RO
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂ru_RU
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Color.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂sk_SK
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂sl_SI
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂sr_Cyrl_RS
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂sr_Latn_RS
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂sr_RS
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂sv_SE
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂th_TH
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Color.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂tr_TR
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Color.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜DateTime.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂uk_UA
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Color.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂vi_VN
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Color.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂zh_CN
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Color.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜DateTime.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📂zh_TW
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Color.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜DateTime.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Address.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Barcode.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Base.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Biased.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Color.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Company.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜DateTime.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜File.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜HtmlLorem.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Image.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Internet.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Lorem.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Miscellaneous.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Payment.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Person.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜PhoneNumber.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜Text.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┣ 📜UserAgent.php
 ┃ ┃ ┃ ┃ ┃ ┃ ┗ 📜Uuid.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜DefaultGenerator.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Documentor.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Factory.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜Generator.php
 ┃ ┃ ┃ ┃ ┃ ┣ 📜UniqueGenerator.php
 ┃ ┃ ┃ ┃ ┃ ┗ 📜ValidGenerator.php
 ┃ ┃ ┃ ┃ ┗ 📜autoload.php
 ┃ ┃ ┃ ┣ 📜CHANGELOG.md
 ┃ ┃ ┃ ┣ 📜composer.json
 ┃ ┃ ┃ ┣ 📜LICENSE
 ┃ ┃ ┃ ┗ 📜readme.md
 ┃ ┗ 📜autoload.php
 ┣ 📜composer.json
 ┣ 📜composer.lock
 ┣ 📜latihan.php
 ┗ 📜README.md