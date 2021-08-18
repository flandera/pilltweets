## Tweets fetcher for Pilulka

Testing application fo fetching tweets with specific keywords from Twitter

## Setup
clone the project from github
run composer install locally or in project container
run npm install locally or in project container
copy .env.example to .env
fill in twitter API token and secret values to corresponding section of .env
check and set you desired keywords in .env - for these we will search in twitter

## How to run
run docker-compose up in project working directory

## Test results
Check localhost:8085 in your browser and you should see page with results, if any is present
Use attached postman collection in folder Documentation to access api of project for results in json
[Documentation](./Documentation/Pilulka.postman_collection.json)

