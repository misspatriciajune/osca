<?php

/**
 * This is the model class for table "senior".
 *
 * The followings are the available columns in table 'senior':
 * @property string $id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $birth_date
 * @property string $birth_place
 * @property string $gender
 * @property integer $house_no
 * @property string $street
 * @property string $barangay
 * @property integer $years_of_residency
 * @property integer $tel_no
 * @property string $civil_status
 * @property string $spouse_name
 * @property integer $spouse_age
 * @property string $educ_attainment
 * @property string $work_xp
 * @property string $employed
 * @property string $position
 * @property string $monthly_salary
 * @property string $employer
 * @property string $employer_address
 * @property integer $employer_tel_no
 * @property string $other_income
 * @property integer $other_income_value
 * @property string $philhealth_member
 * @property integer $philhealth_member_no
 * @property string $philhealth_dependent
 * @property string $philhealth_dependent_name
 */
class Senior extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'senior';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, first_name, middle_name, last_name, birth_date, birth_place, gender, house_no, street, barangay, years_of_residency, tel_no, civil_status, educ_attainment', 'required'),
			//array('id', 'required'),
			array('house_no, years_of_residency, tel_no, spouse_age, employer_tel_no, other_income_value, philhealth_member_no', 'numerical', 'integerOnly'=>true),
			array('id, first_name, middle_name, last_name, employed, gender, birth_date, philhealth_member, philhealth_dependent, birth_place, street, barangay, civil_status, spouse_name, educ_attainment, work_xp, position, monthly_salary, employer, employer_address, other_income, philhealth_dependent_name', 'length', 'max'=>64),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, middle_name, last_name, birth_date, birth_place, gender, house_no, street, barangay, years_of_residency, tel_no, civil_status, spouse_name, spouse_age, educ_attainment, work_xp, employed, position, monthly_salary, employer, employer_address, employer_tel_no, other_income, other_income_value, philhealth_member, philhealth_member_no, philhealth_dependent, philhealth_dependent_name', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name',
			'middle_name' => 'Middle Name',
			'last_name' => 'Last Name',
			'birth_date' => 'Birth Date',
			'birth_place' => 'Birth Place',
			'gender' => 'Gender',
			'house_no' => 'House Number',
			'street' => 'Street',
			'barangay' => 'Barangay',
			'years_of_residency' => 'Years Of Residency',
			'tel_no' => 'Telephone Number',
			'civil_status' => 'Civil Status',
			'spouse_name' => 'Spouse Name',
			'spouse_age' => 'Spouse Age',
			'educ_attainment' => 'Educational Attainment',
			'work_xp' => 'Work Experience',
			'employed' => 'Employed',
			'position' => 'Position',
			'monthly_salary' => 'Monthly Salary',
			'employer' => 'Employer',
			'employer_address' => 'Employer Address',
			'employer_tel_no' => 'Employer Telephone Number',
			'other_income' => 'Other Income',
			'other_income_value' => 'Other Income Value',
			'philhealth_member' => 'Philhealth Member',
			'philhealth_member_no' => 'Philhealth Member No',
			'philhealth_dependent' => 'Philhealth Dependent',
			'philhealth_dependent_name' => 'Philhealth Dependent Name',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('birth_date',$this->birth_date,true);
		$criteria->compare('birth_place',$this->birth_place,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('house_no',$this->house_no);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('barangay',$this->barangay,true);
		$criteria->compare('years_of_residency',$this->years_of_residency);
		$criteria->compare('tel_no',$this->tel_no);
		$criteria->compare('civil_status',$this->civil_status,true);
		$criteria->compare('spouse_name',$this->spouse_name,true);
		$criteria->compare('spouse_age',$this->spouse_age);
		$criteria->compare('educ_attainment',$this->educ_attainment,true);
		$criteria->compare('work_xp',$this->work_xp,true);
		$criteria->compare('employed',$this->employed,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('monthly_salary',$this->monthly_salary,true);
		$criteria->compare('employer',$this->employer,true);
		$criteria->compare('employer_address',$this->employer_address,true);
		$criteria->compare('employer_tel_no',$this->employer_tel_no);
		$criteria->compare('other_income',$this->other_income,true);
		$criteria->compare('other_income_value',$this->other_income_value);
		$criteria->compare('philhealth_member',$this->philhealth_member,true);
		$criteria->compare('philhealth_member_no',$this->philhealth_member_no);
		$criteria->compare('philhealth_dependent',$this->philhealth_dependent,true);
		$criteria->compare('philhealth_dependent_name',$this->philhealth_dependent_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Senior the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
