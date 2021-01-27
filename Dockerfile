FROM centos:7
ENV container docker
RUN (cd /lib/systemd/system/sysinit.target.wants/; for i in *; do [ $i == \
systemd-tmpfiles-setup.service ] || rm -f $i; done); \
rm -f /lib/systemd/system/multi-user.target.wants/*;\
rm -f /etc/systemd/system/*.wants/*;\
rm -f /lib/systemd/system/local-fs.target.wants/*; \
rm -f /lib/systemd/system/sockets.target.wants/*udev*; \
rm -f /lib/systemd/system/sockets.target.wants/*initctl*; \
rm -f /lib/systemd/system/basic.target.wants/*;\
rm -f /lib/systemd/system/anaconda.target.wants/*;
VOLUME [ "/sys/fs/cgroup" ]
CMD ["/usr/sbin/init"]

# FROM prestashop/base:7.3-apache
# LABEL maintainer="PrestaShop Core Team <coreteam@prestashop.com>"

# ENV PS_VERSION 1.7.7.0

# # Get PrestaShop
# ADD https://www.prestashop.com/download/old/prestashop_1.7.7.0.zip /tmp/prestashop.zip

# # Extract
# RUN mkdir -p /tmp/data-ps \
# 	&& unzip -q /tmp/prestashop.zip -d /tmp/data-ps/ \
# 	&& bash /tmp/ps-extractor.sh /tmp/data-ps \
# 	&& rm /tmp/prestashop.zip