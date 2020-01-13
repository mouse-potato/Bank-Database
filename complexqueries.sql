


/*INNER JOIN  */
/* Tells which customer has same temporary and permanent address*/
select * 
from temp_address inner join per_address 
on temp_address.Cust_ID=per_address.Cust_ID
where temp_address.House_no=per_address.House_no and temp_address.street=per_address.street
and temp_address.city=per_address.city ;




/*NATURAL JOIN*/
/*shows the transaction done by the customer */
select *
from customer natural join 
(select CHQ_DEP as CHQ_DEP,CSH_DEP as CSH_DEP,CSH_WID as CSH_WID,Cust_ID as ID,ATM_NO as ATM_NO from transaction)
 as transac; 




/*LEFT JOIN*/
/* shows the details of customer who have taken loan of amount more than 150000*/
select * 
from customer left outer join loan
on customer.ID=loan.Cust_ID
where loan.amount>150000;





/*RIGHT JOIN*/
/* tells the transaction made by the customer*/
select customer.name,transaction.*
from customer right outer join transaction
on customer.id=transaction.Cust_ID;





/*AGGREGATE FUNCTIONS*/
/* shows the total ,average , minimun and maximum loan taken from a bank*/
select sum(amount),avg(amount),min(amount),max(amount)
from loan;






/*GROUP HAVING*/
/* tells the average , total, minimun and maximum loan taken by male customers of the bank*/
select sum(amount),avg(amount),min(amount),max(amount)
from customer join loan 
on customer.id=loan.Cust_ID
group by gender
having gender='M';





/*USE OF COUNT*/
/* tells how many customers are there in the bank*/
select count(*)
from customer;





/*EXISTS (EDUCATION LOAN)*/
/*shows the details of customer who have taken education loan*/
select *
from customer
where exists(select *
				from loan
				where loan.Description='Education' and loan.Cust_ID=customer.id);




/*ARITHMETIC (LOAN PAYEMENT)*/
/*tells the loan amount to be paid by customer */
select customer.name as name,(loan.amount+(loan.amount*loan.interest*loan.tenure/100)) as amount_payable
from customer,loan 
where customer.ID=loan.Cust_ID;
