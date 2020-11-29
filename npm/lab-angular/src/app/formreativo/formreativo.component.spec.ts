import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FormreativoComponent } from './formreativo.component';

describe('FormreativoComponent', () => {
  let component: FormreativoComponent;
  let fixture: ComponentFixture<FormreativoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ FormreativoComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(FormreativoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
