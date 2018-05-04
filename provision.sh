GITHUB_EMAIL=$1
GITHUB_USERNAME=$2

echo "deb http://packages.dotdeb.org jessie all" > /etc/apt/sources.list.d/dotdeb.list
wget -O- https://www.dotdeb.org/dotdeb.gpg | apt-key add - apt update

apt-get update
apt-get upgrade -y

apt-get install php7.0 -y

sudo apt-get install git-core -y

if [ ! -f /vagrant/.ssh/id_rsa.github ]; then
    mkdir /vagrant/.ssh
    ssh-keygen -b 2048 -t rsa -f /vagrant/.ssh/id_rsa.github -q -N "" -C "$GITHUB_EMAIL"
fi

cp /vagrant/.ssh/config /home/vagrant/.ssh/config
chown -R vagrant:vagrant /home/vagrant/.ssh/config

git config --global push.default simple
git config --global user.email "$GITHUB_EMAIL"
git config --global user.name "$GITHUB_USERNAME"