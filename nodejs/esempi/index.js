const express=require('express')
const app=express()
app.get('/', (req, res)=>{
    res.sendFile(__dirname+'index.html')
})
app.put('/', (req, res)=>{
    res.send('metodo put')
})
app.listen(3000)