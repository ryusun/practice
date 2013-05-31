#/bin/bash 

sudo rsync -av --inplace /home/yhori/practice/practice/html/ /var/www/html
sudo rsync -av --inplace /home/yhori/practice/practice/zendapps/ /var/www/zendapps

sudo chown -R root:root /var/www/
sudo chmod -R 755 /var/www/ 
#sudo chmod -R 644 /var/www/ 


