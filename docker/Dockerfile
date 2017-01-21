FROM fedora:25
RUN dnf install -y httpd
ENTRYPOINT ["httpd", "-X"]
VOLUME /var/www/html
EXPOSE 8080:80
