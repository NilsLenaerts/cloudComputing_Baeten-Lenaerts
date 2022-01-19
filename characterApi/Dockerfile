FROM ubuntu:20.04

MAINTAINER nils lenaerts "nils.lenaerts@student.uhasselt.be"

RUN apt-get update -y && apt-get upgrade -y && apt-get install python3 -y python3-pip

COPY ./requirements.txt /app/requirements.txt

WORKDIR /app

RUN pip install -r requirements.txt

COPY . /app

ENTRYPOINT [ "python3" ]

CMD [ "firebasesdkadmin.py"]