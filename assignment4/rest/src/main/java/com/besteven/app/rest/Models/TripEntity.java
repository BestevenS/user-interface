package com.besteven.app.rest.Models;

import jakarta.persistence.*;

import java.util.Date;

@Entity
public class TripEntity {



    // all variables and their getters & setters
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private long tripID;
    @Column
    private String fromCity;
    @Column
    private String toCity;
    @Column
    private Date fromDate;
    @Column
    private Date toDate;

    public long getTripID() {
        return tripID;
    }

    public void setTripID(long tripID) {
        this.tripID = tripID;
    }

    public String getFromCity() {
        return fromCity;
    }

    public void setFromCity(String fromCity) {
        this.fromCity = fromCity;
    }

    public String getToCity() {
        return toCity;
    }

    public void setToCity(String toCity) {
        this.toCity = toCity;
    }

    public Date getFromDate() {
        return fromDate;
    }

    public void setFromDate(Date fromDate) {
        this.fromDate = fromDate;
    }

    public Date getToDate() {
        return toDate;
    }

    public void setToDate(Date toDate) {
        this.toDate = toDate;
    }
}
