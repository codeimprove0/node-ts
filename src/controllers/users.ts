import  {Request,Response} from "express"; 
import UserModel  from "../models/users";

import { createUser,findAndUpdate,findUser,deleteUser} from "../services/users.service"

 const homeDetail = async (req:Request,resp:Response)=>{  
    const user = UserModel.mathStaticFn();

   //let myData = await UserModel.find();

   //--- ADD--- 
   //const user = await createUser({  name:'test data',dept:'xyz'})

   //---UPDATE ---
   //const user = await findAndUpdate({name:'Ram'},{dept:'HR'},{new:true});

   //--- Find---
   //const user = await findUser({_id:'61a52c03c3dc3f2ebdcf5a07'})

   //-- Delete =---
   //const user = await deleteUser({_id:'61a52c03c3dc3f2ebdcf5a07'})

    let ob = {  x:12, y:30 }    
    let data = sumData(ob);
    resp.json({
        message:"Home Page New",
        data:data,
        myData:user
    })
 }

 interface params{
   x:number;
   y:number;
 }

 type sumCheck = (x:params) => number

 const sumData:sumCheck = (ob:params)=>{
    return ob.x+ob.y;
 }
 export {
    homeDetail
 }