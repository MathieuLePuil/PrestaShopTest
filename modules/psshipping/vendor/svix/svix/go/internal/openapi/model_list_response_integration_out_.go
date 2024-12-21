/*
 * Svix API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * API version: 1.1.1
 */

// Code generated by OpenAPI Generator (https://openapi-generator.tech); DO NOT EDIT.

package openapi

import (
	"encoding/json"
)

// ListResponseIntegrationOut struct for ListResponseIntegrationOut
type ListResponseIntegrationOut struct {
	Data []IntegrationOut `json:"data"`
	Done bool `json:"done"`
	Iterator NullableString `json:"iterator,omitempty"`
	PrevIterator NullableString `json:"prevIterator,omitempty"`
}

// NewListResponseIntegrationOut instantiates a new ListResponseIntegrationOut object
// This constructor will assign default values to properties that have it defined,
// and makes sure properties required by API are set, but the set of arguments
// will change when the set of required properties is changed
func NewListResponseIntegrationOut(data []IntegrationOut, done bool) *ListResponseIntegrationOut {
	this := ListResponseIntegrationOut{}
	this.Data = data
	this.Done = done
	return &this
}

// NewListResponseIntegrationOutWithDefaults instantiates a new ListResponseIntegrationOut object
// This constructor will only assign default values to properties that have it defined,
// but it doesn't guarantee that properties required by API are set
func NewListResponseIntegrationOutWithDefaults() *ListResponseIntegrationOut {
	this := ListResponseIntegrationOut{}
	return &this
}

// GetData returns the Data field value
func (o *ListResponseIntegrationOut) GetData() []IntegrationOut {
	if o == nil {
		var ret []IntegrationOut
		return ret
	}

	return o.Data
}

// GetDataOk returns a tuple with the Data field value
// and a boolean to check if the value has been set.
func (o *ListResponseIntegrationOut) GetDataOk() (*[]IntegrationOut, bool) {
	if o == nil  {
		return nil, false
	}
	return &o.Data, true
}

// SetData sets field value
func (o *ListResponseIntegrationOut) SetData(v []IntegrationOut) {
	o.Data = v
}

// GetDone returns the Done field value
func (o *ListResponseIntegrationOut) GetDone() bool {
	if o == nil {
		var ret bool
		return ret
	}

	return o.Done
}

// GetDoneOk returns a tuple with the Done field value
// and a boolean to check if the value has been set.
func (o *ListResponseIntegrationOut) GetDoneOk() (*bool, bool) {
	if o == nil  {
		return nil, false
	}
	return &o.Done, true
}

// SetDone sets field value
func (o *ListResponseIntegrationOut) SetDone(v bool) {
	o.Done = v
}

// GetIterator returns the Iterator field value if set, zero value otherwise (both if not set or set to explicit null).
func (o *ListResponseIntegrationOut) GetIterator() string {
	if o == nil || o.Iterator.Get() == nil {
		var ret string
		return ret
	}
	return *o.Iterator.Get()
}

// GetIteratorOk returns a tuple with the Iterator field value if set, nil otherwise
// and a boolean to check if the value has been set.
// NOTE: If the value is an explicit nil, `nil, true` will be returned
func (o *ListResponseIntegrationOut) GetIteratorOk() (*string, bool) {
	if o == nil  {
		return nil, false
	}
	return o.Iterator.Get(), o.Iterator.IsSet()
}

// HasIterator returns a boolean if a field has been set.
func (o *ListResponseIntegrationOut) HasIterator() bool {
	if o != nil && o.Iterator.IsSet() {
		return true
	}

	return false
}

// SetIterator gets a reference to the given NullableString and assigns it to the Iterator field.
func (o *ListResponseIntegrationOut) SetIterator(v string) {
	o.Iterator.Set(&v)
}
// SetIteratorNil sets the value for Iterator to be an explicit nil
func (o *ListResponseIntegrationOut) SetIteratorNil() {
	o.Iterator.Set(nil)
}

// UnsetIterator ensures that no value is present for Iterator, not even an explicit nil
func (o *ListResponseIntegrationOut) UnsetIterator() {
	o.Iterator.Unset()
}

// GetPrevIterator returns the PrevIterator field value if set, zero value otherwise (both if not set or set to explicit null).
func (o *ListResponseIntegrationOut) GetPrevIterator() string {
	if o == nil || o.PrevIterator.Get() == nil {
		var ret string
		return ret
	}
	return *o.PrevIterator.Get()
}

// GetPrevIteratorOk returns a tuple with the PrevIterator field value if set, nil otherwise
// and a boolean to check if the value has been set.
// NOTE: If the value is an explicit nil, `nil, true` will be returned
func (o *ListResponseIntegrationOut) GetPrevIteratorOk() (*string, bool) {
	if o == nil  {
		return nil, false
	}
	return o.PrevIterator.Get(), o.PrevIterator.IsSet()
}

// HasPrevIterator returns a boolean if a field has been set.
func (o *ListResponseIntegrationOut) HasPrevIterator() bool {
	if o != nil && o.PrevIterator.IsSet() {
		return true
	}

	return false
}

// SetPrevIterator gets a reference to the given NullableString and assigns it to the PrevIterator field.
func (o *ListResponseIntegrationOut) SetPrevIterator(v string) {
	o.PrevIterator.Set(&v)
}
// SetPrevIteratorNil sets the value for PrevIterator to be an explicit nil
func (o *ListResponseIntegrationOut) SetPrevIteratorNil() {
	o.PrevIterator.Set(nil)
}

// UnsetPrevIterator ensures that no value is present for PrevIterator, not even an explicit nil
func (o *ListResponseIntegrationOut) UnsetPrevIterator() {
	o.PrevIterator.Unset()
}

func (o ListResponseIntegrationOut) MarshalJSON() ([]byte, error) {
	toSerialize := map[string]interface{}{}
	if true {
		toSerialize["data"] = o.Data
	}
	if true {
		toSerialize["done"] = o.Done
	}
	if o.Iterator.IsSet() {
		toSerialize["iterator"] = o.Iterator.Get()
	}
	if o.PrevIterator.IsSet() {
		toSerialize["prevIterator"] = o.PrevIterator.Get()
	}
	return json.Marshal(toSerialize)
}

type NullableListResponseIntegrationOut struct {
	value *ListResponseIntegrationOut
	isSet bool
}

func (v NullableListResponseIntegrationOut) Get() *ListResponseIntegrationOut {
	return v.value
}

func (v *NullableListResponseIntegrationOut) Set(val *ListResponseIntegrationOut) {
	v.value = val
	v.isSet = true
}

func (v NullableListResponseIntegrationOut) IsSet() bool {
	return v.isSet
}

func (v *NullableListResponseIntegrationOut) Unset() {
	v.value = nil
	v.isSet = false
}

func NewNullableListResponseIntegrationOut(val *ListResponseIntegrationOut) *NullableListResponseIntegrationOut {
	return &NullableListResponseIntegrationOut{value: val, isSet: true}
}

func (v NullableListResponseIntegrationOut) MarshalJSON() ([]byte, error) {
	return json.Marshal(v.value)
}

func (v *NullableListResponseIntegrationOut) UnmarshalJSON(src []byte) error {
	v.isSet = true
	return json.Unmarshal(src, &v.value)
}

