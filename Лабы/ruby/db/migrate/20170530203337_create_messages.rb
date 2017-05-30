class CreateMessages < ActiveRecord::Migration
  def change
    create_table :messages do |t|
      t.string :login
      t.string :password
      t.string :email
      t.string :message

      t.timestamps null: false
    end
  end
end
