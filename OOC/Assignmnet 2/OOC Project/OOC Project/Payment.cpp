#include "Payment.h"
#include"Order.h"
#include<iostream>
using namespace std;


Payment::Payment() {
	paymenttype = "";
	paymentid = 0;
	paymentmethod = "";

}
Payment::Payment(string Ptype, int Pid, string Pmethod) {
	paymenttype = Ptype;
	paymentid = Pid;
	paymentmethod = Pmethod;

}
void Payment::setdetails(string Ptype, int Pid, string Pmethod, double PDelivery)
{
	paymenttype = Ptype;
	paymentid = Pid;
	paymentmethod = Pmethod;
	Dcharge = PDelivery;
}
void Payment::paymentdetails()
{
	cout << "payment type : " << paymenttype << endl;
	cout << "payment id : " << paymentid << endl;
	cout << "payment method : " << paymentmethod << endl;
	cout << "delivery charge : " << Dcharge << endl;
}
double Payment::getDeliveryCharge() const
{
	return Dcharge;
}

void Payment::paymentcomplaint()
{
	cout << "card OTP validation error" << endl;
}
Payment::~Payment() {

}