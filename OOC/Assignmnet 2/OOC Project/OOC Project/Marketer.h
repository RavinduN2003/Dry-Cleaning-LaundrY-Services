#pragma once
#include "Campaign.h"
#include <iostream>

using namespace std;

class Marketer {
private:
    int marketerId;
    string marketerName;

public:
    Marketer();
    Marketer(int mId,string maName); 
    void createMarketingCampaign(int cDate, int cTime, int cId, string cDescription);
    string manageMarketerCampaign(int cId);
    ~Marketer(); 
};

