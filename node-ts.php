  
node --version 
npm ---version 

npm install -g typescript

tsc --verison 

npm install -g ts-node 
    ts-node --version
        run typescript files directly

 
------- RUN ---------
tsc app.ts node app.js
ts-node app.ts

tsc 
then node file.js
 

npm init --y 
tsc --init

npm install @types/node 

ts-node --version



-------------

1) npm init --y
 2) tsc --init
 3) npm install @types/node
 4)  npm install -g ts-node   


 #################

 "test": "echo \"Error: no test specified\" && exit 1",
    "start": "ts-node ./src/index.ts",
    "start:tsc": "nodemon ./src/index.ts",
    "start:new": "nodemon --watch 'src/*.ts' --exec 'ts-node' src/index.ts",
    "tsc": "tsc",
    "dev": "ts-node-dev --respawn --transpileOnly ./src/index.ts",
    "dev": "npx ts-node-dev --respawn --transpile-only --debug ./src/index.ts",
    "prod": "tsc && node ./build/index.js"
######### 2 ##########

npm i express nodemon  

npm i express @types/express nodemon typescript

express @types/express nodemon ts-node @types/node typescript


nodemon --watch 'src/**/*.ts' --exec 'ts-node' src/index.ts


ts-node --transpile-only ./src/start.ts

