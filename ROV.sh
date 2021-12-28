#!/bin/bash


whiptail --title "ROV Setup" --infobox "This is the disk image for Skippy's ROV." 8 78


apt install git
git clone https://github.com/PhilipMcGaw/rov.git ~/ROV
