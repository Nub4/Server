# ft_server

Build image:
docker build -t new .

Run and go to the container:
docker run -it --rm -p 80:80 -p 443:443 new
