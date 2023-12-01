#pragma once
#include<iostream>
#include<string>

using namespace std;
#include"Order.h"

class Payment
{
private:
	string paymenttype;
	int paymentid;
	string paymentmethod;
	double Dcharge;
	Order order;
public:
	Payment();
	Payment(string Ptype,int Pid,string Pmethod);
	void setdetails(string Ptype, int Pid, string Pmethod, double Pdelivery);
	void paymentdetails();
	double getDeliveryCharge() const;
	void paymentcomplaint();
	~Payment();
};

