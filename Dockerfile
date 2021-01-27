FROM local/c8-systemd
RUN yum -y install httpd; yum clean all; systemctl enable httpd.service
EXPOSE 80
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