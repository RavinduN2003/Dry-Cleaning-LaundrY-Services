#pragma once
#include "RegisteredUser.h"
#include "Service.h"
#include "Complaint.h"
#include <iostream>

using namespace std;

class Administrator : public RegisteredUser
{
public:
	Administrator();
	Administrator(string uName, int pw, string rName, int uId);
	string editServices(int sId, string sType, double sPrice);
	void handleComplaint();
	~Administrator();
};

